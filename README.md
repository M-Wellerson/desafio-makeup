# CakePHP Aplicação para reserva de salas

## Configuração Database

1. Troque os campos no arquivo \config\app_local.php:
- host: 
- database: 
- user: 
- senha: 

## Configuração

1. Run 
```bash 
composer install
```
2. Depois de ter configurado o Database run 
```bash 
bin/cake migrations migrate
```
3. Rode as seeds longo em seguida 
```bash 
bin/cake migrations seed
```
4. Inicie o Serve 
```bash 
bin/cake server
```
5. Acesse http://localhost:8765/users/login
6. Login com o email admins@gmail.com e senha 123