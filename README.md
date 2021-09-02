### php 설치 방법

1. php 7.1 다운로드
2. Windows 용 zip 파일 압축 해제
3. **C:\** 에 php7 로 폴더 이름 변경
4. **C:\Apache24\conf\httpd.conf** 에 php7 부분 주석 해제 후 수정

```bash
##########################################################
#PHP7
#Loadfile "c:/php7/php7.dll"
LoadFile "c:/php7/php7ts.dll"
LoadFile "c:/php7/libpq.dll"
LoadFile "c:/php7/libssh2.dll"
LoadModule php7_module "C:/php7/php7apache2_4.dll"
AddType application/x-httpd-php .php .html
AddHandler application/x-httpd-php .php .html
#configure the path to php.ini
PHPIniDir "c:/php7"
##########################################################
```

5. C:\php7\php.ini-development 의 파일 이름을 php.ini 로 변경
6. php.ini 수정 (앞에 ; 주석 제거)

```bash
extension_dir = "C:/php7/ext" # 디렉토리 재설정
......
date.timezone = Asia/Seoul # 날짜 설정
......
expose_php = Off # 버전 감추기
```

7. 라이브러리 설정을 위해 php.ini 파일 안에 추가하기

```bash
extension=php_mbstring.dll
extension=php_pdo_pgsql.dll
extension=php_pgsql.dll
```

8. 라이브러리 설정을 위해 php.ini 파일 안에 찾아서 주석 제거

```bash
extension=curl
extension=gd2
extension=openssl
extension=sockets
```
9. Apache 재시작

```bash
httpd.exe -k restart
```

10. index.php 안의 phpinfo() 함수 작성 후 PDO/PGSQL 내용 확인되면 종료


### php MVC 세팅

[Build a PHP MVC Application: Introduction (Part 1/9)](https://www.youtube.com/watch?v=OsCTzGASImQ&list=PLfdtiltiRHWGXVHXX09fxXDi-DqInchFD&index=1)

[https://www.youtube.com/watch?v=OsCTzGASImQ&list=PLfdtiltiRHWGXVHXX09fxXDi-DqInchFD&index=1](https://www.youtube.com/watch?v=OsCTzGASImQ&list=PLfdtiltiRHWGXVHXX09fxXDi-DqInchFD&index=1)

- Step 8까지 따라하고 database는 Postgresql 페이지를 확인하여 세팅