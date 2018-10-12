<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>


## 确保 安装了 redis 服务

依次执行以下 命令
mv .env.example .env

composer install

配置mysql 数据库

php artisan migrate

php artisan make:auth


npm install 

npm run watch

laravel-echo-server init
    
    
    laravel-echo-server init
    
    // 是否在开发模式下运行此服务器（y/n） 输入y
    ? Do you want to run this server in development mode? (y/N) 
    
    // 设置服务器的端口 默认 6001 输入 6001就可以了 或者你想要的
    ? Which port would you like to serve from? (6001)
    
    // 想用的数据库  选择 redis
    ? Which database would you like to use to store presence channel members? (Use arrow keys)
    ❯ redis 
      sqlite 
      
    //   这里输入 你的laravel  项目的访问域名
    ? Enter the host of your Laravel authentication server. (http://localhost) 
    
    // 选择 网络协议 http
    ? Will you be serving on http or https? (Use arrow keys)
    ❯ http 
      https 
      
    // 您想为HTTP API生成客户端ID/密钥吗 N
    ? Do you want to generate a client ID/Key for HTTP API? (y/N) 
    
    // 要设置对API的跨域访问吗？（y/n）N
    Configuration file saved. Run laravel-echo-server start to run server.
    
设置完成后  项目根目录 下 会生成 laravel-echo-server.json 文件  这里面就是刚才的配置

laravel-echo-server start

[详细文档](https://www.iwhao.top/article/24)


