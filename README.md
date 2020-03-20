## Clone with SSHの場合
### 初回は下記コマンドを行う
    git clone git@github.com:ChitaChita/twitter-clone.git    

## Clone with HTTPSの場合
    git clone https://github.com/ChitaChita/twitter-clone.git
2回目移行は
    git pull


### docker-machineを起動
##### macだと ```docker-machine create``` を挟むかも 
    eval "$(docker-machine env default)"
    docker-machine start default

### docker-composeを使ってイメージをビルド
##### docker-compose.yml に従ってビルドします。
    docker-compose build

### docker-composeを使ってアプリを起動
    docker-compose up
    
    =>
    コンテナが立ち上がる
    
    docker-compose ps -a
    
    =>
      Name                Command              State               Ports
    --------------------------------------------------------------------------------
    f-mysql    docker-entrypoint.sh mysqld     Up      0.0.0.0:3306->3306/tcp,
                                                       33060/tcp
    f-nginx    nginx -g daemon off;            Up      0.0.0.0:8080->80/tcp
    frontier   docker-php-entrypoint php-fpm   Up      0.0.0.0:9000->9000/tcp

### ブラウザでアクセス

`localhost:8080`

`192.168.99.100:8080`


##### コンテナを停止して破棄
    docker-compose down

※ volume上にDBを作るようにしているため、オプションの-vを使うとデータが消えるので注意してください。
