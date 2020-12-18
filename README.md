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
- 사용자 인증 관련 뷰와 컨트롤러 생성
    ```bash
      composer require laravel/ui "^2.0" -vvv
      php artisan ui vue --auth
      npm install && npm run dev
    ```
    - 생성 파일
        - layouts/app.blade.php : 다른 페이지에서 사용하는 레이아웃을 정의한 페이지
        - welcome.blade.php : 사이트의 웰컴 페이지
        - home.blade.php : 로그인 사용자의 대시보드 뷰
        - auth/login.blade.php : 로그인 페이지
        - auth/register.blade.php : 사용자 등록 페이지
        - auth/passwords/email.blade.php : 패스워드 재설정 확인 페이지
        - auth/passwords/reset.blade.php : 암호 재설정 프롬포트 페이지
        - auth/emails/password.blade.php : 암호 재설정 이메일
