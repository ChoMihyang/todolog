# Laravel Project - To Do List

### 2020-12-14(월)
- App 환경 설정
    - 프로젝트 기본 설정
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
