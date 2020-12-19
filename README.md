# Laravel Project - To Do List

### 2020-12-14(월)
- 프로젝트 생성
    - 기본 설정
        ```bash
         composer install
         php -r "copy('.env.example', '.env');"
         php artisan clear-compiled
         php artisan optimize
         php artisan key:gen
        ```
    - 데이터베이스 생성
        ```bash
          CREATE DATABASE todolog CHARACTER SET utf8 COLLATE utf8_bin;
        ```
    - 라이브러리 폴더 추가
        - Todolog 하위 'libraries' 폴더 추가
        - 'composer.json' 폴더 내 아래 문구 추가
        ```bash
         "psr-4" : { "App\\" : ["app/", "libraries/"] }
        ```
        - 자동 로딩 클래스 생성
        ```bash
         $ composer dump-autoload
        ```
### 2020-12-17(목)
- 마이그레이션과 스키마 설계
    - 마이그레이션 생성 - project, task
    - 복수형 테이블 명 - projects, tasks
    - 시더 파일 생성 - users 테이블 내 삽입
   
### 2020-12-18(금)
- 사용자 인증 관련 컨트롤러와 뷰 생성
    ```bash
      composer require laravel/ui "^2.0" -vvv
      php artisan ui vue --auth
      npm install && npm run dev
    ```
    - 생성 컨트롤러
        - HomeController 
        - Auth/ConfirmPasswordController
        - Auth/ForgotPasswordController
        - Auth/LoginController
        - Auth/RegisterController
        - Auth/ResetPasswordController
        - Auth/VerificationController
        
    - 생성 뷰 파일
        - layouts/app.blade.php : 다른 페이지에서 사용하는 레이아웃을 정의한 페이지
        - welcome.blade.php : 사이트의 웰컴 페이지
        - home.blade.php : 로그인 사용자의 대시보드 뷰
        - auth/login.blade.php : 로그인 페이지
        - auth/register.blade.php : 사용자 등록 페이지
        - auth/passwords/email.blade.php : 패스워드 재설정 확인 페이지
        - auth/passwords/reset.blade.php : 암호 재설정 프롬포트 페이지
        - auth/emails/password.blade.php : 암호 재설정 이메일

### 2020-12-19(토)
- web 미들웨어 지정 방법
    1. routes.php 의 미들웨어 web 그룹에 라우팅 정의
    2. 컨트롤러 클래스의 생성자에 지정
        - 라라벨 5.2.27부터는 모든 라우팅에 web 미들웨어가 자동 설정됨 
        - 주석 처리
        ```bash
           public function __construct(){
               //$this->middleware('web');  
           }       
        ```
- auth 라우팅 생성
    - Auth::routes();
    - 로그인, 사용자 등록, 암호 재설정을 위한 라우팅을 래핑한 도우미 메서드
- 모든 뷰는 app.blade.php 를 상속 -> 동일한 페이지 제목을 갖음
    - '@yield' 로 자식 페이지마다 각기 다른 제목을 갖도록 함
- Auth::guest() 를 사용해 사용자의 로그인 여부에 따라 서로 다른 메뉴 출력

- 가장 초기 페이지 생성
    - 사용자, 프로젝트, 태스크 수 조회
    - welcome view 로 결과값(배열) 반환
