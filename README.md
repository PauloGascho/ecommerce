# Projeto E-commerce

Projeto desenvolvido do zero no [Curso de PHP 7](https://www.udemy.com/curso-completo-de-php-7/) disponível na plataforma da Udemy e no site do [HTML5dev.com.br](https://www.html5dev.com.br/curso/curso-completo-de-php-7).

Template usado no projeto [Almsaeed Studio](https://almsaeedstudio.com)

## Como rodar o projeto
```bash
cd ~/git/ecommerce
docker-compose up
```

## Como parar o projeto
```bash
cd ~/git/ecommerce
docker-compose down
```

# Acessos

| Página | Acesso |
| ---------------- | -------------------- |
| Ecommerce | [localhost:8080](http://localhost:8080) |
| PHPMyAdmin | [localhost:9090](http://localhost:9090) |

# Comandos docker

## Verificar as imagens locais
```bash
docker images
```

## Verificar os containeres que estão executando no momento
```bash
docker ps
```

## Acessar um container

PHP
```bash
docker exec -it ecommerce-php bash
```

Servidor
```bash
docker exec -it ecommerce-server bash
```
