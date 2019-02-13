# LaraBoot

<a href="https://travis-ci.org/fabiojaniolima/laraboot"><img src="https://travis-ci.org/fabiojaniolima/laraboot.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/fabiojaniolima/laraboot"><img src="https://poser.pugx.org/fabiojaniolima/laraboot/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/fabiojaniolima/laraboot"><img src="https://poser.pugx.org/fabiojaniolima/laraboot/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/fabiojaniolima/laraboot"><img src="https://poser.pugx.org/fabiojaniolima/laraboot/license.svg" alt="License"></a>

Este projeto foi construido com base no [Laravel 5.7](https://laravel.com/docs/5.7), para uma visão maior favor consultar o arquivo [CHANGELOG](CHANGELOG.md).

As palavras-chave "DEVE", "NÃO DEVE", "REQUER", "DEVERIA", "NÃO DEVERIA", "PODERIA", "NÃO PODERIA", "RECOMENDÁVEL", "PODE", e "OPCIONAL" neste documento devem ser interpretadas como descritas no RFC 2119. Tradução livre RFC 2119 pt-br.

## Recursos disponíveis

> Lista dos itens implementados até o momento.

- Tradução pt-BR para:
  - Mensagens de validação
  - Labels
  - Páginas de erro: 403, 404 e 405
  - E-mail de recuperação de senha
- Área restrita: `/painel`
  - Tela de Dashboard mostrando total de usuários cadastrados, bloqueados e ativos
  - Tela para o usuário alterar os dados cadastrais
  - Tela para o usuário alterar o e-mail
  - Tela para o usuário alterar a senha
  - Tela para o super admin gerenciar os usuários: `/painel/gerenciar-usuarios`
    - Listagem de usuários
    - Bloqueio/Desloqueio de usuários
    - Excluir usuários
    - Buscar usuários por nome ou email
    - Restrinção: só o super admin (user_id = 1) pode acessar
- Formulário de recuperação de senha com auto-preenchimento do campo e-mail

## Requisitos

Você DEVE satisfazer as seguintes dependências nativas do Laravel:

- PHP >= 7.1.3
- OpenSSL PHP Extension
- PDO PHP Extension
- Mbstring PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension
- Ctype PHP Extension
- JSON PHP Extension
- BCMath PHP Extension
 
**Obs**: você DEVE ter também o [Composer](https://getcomposer.org) instalado.

## Proposta do projeto

> Cansado de sempre que baixa o Laravel ter que aplicar traduções, adicionar iconização as páginas, implementar troca de senha e demais itens? Então seus problemas acabaram, ao menos em parte! 

## Como instalar

Segue abaixo as formas como você pode proceder para instalar este projeto.

### Via composer

Para realizar a instalação automática:

```
composer create-project --prefer-dist fabiojaniolima/laraboot
```

### Via git clone

Primeiramente você deve clonar este repositório:

```
git clone https://github.com/fabiojaniolima/laraboot.git
```

> **Nota**: os comandos abaixo DEVEM ser executados dentro do diretório descarregado no passo anterior.

```
composer install
```

Crie o arquivo de configuração do Laravel e posteriormente gere uma chave:

```
composer run-script post-create-project-cmd
composer run-script post-root-package-install
composer run-script post-autoload-dump
```

## Populando base de dados (OPCIONAL)

Para rodar a instrução a seguir, você DEVE primeiramente configurar os dados de acesso ao banco no arquivo **.env**.

Posteriormente a configuração do banco execute:

```
php artisan migrate --seed
```

Pronto, agora abra o navegador e acessa sua aplicação. O argumento `--seed` executado acima cria por padrão um usuário com os seguintes dados:

- E-mail: **admin@user.com**
- Senha: **password**

## Container para Dev (OPCIONAL)

> Opcionalmente você pode utilizar meu container Docker para ambiente de desenvolvimento com PHP. Veja abaixo como fazer isso.

Execute a instrução abaixo para baixar e criar um projeto baseado no **Laraboot**:

```
docker run --rm -v $(pwd):/app fabiojanio/php composer create-project --prefer-dist fabiojaniolima/laraboot meu-projeto
```

Acesse o diretório do projeto e execute:

```
docker run -v $(pwd):/app -d -p 80:80 --name nome_do_container fabiojanio/php php -S 0.0.0.0:80 -t public
```

Para se conectar ao container e usar o composer, execute:

```
docker exec -it nome_do_container sh
```

Para maiores informações acesse: [https://hub.docker.com/u/fabiojanio](https://hub.docker.com/u/fabiojanio) 

## License

Todo o conteúdo presente neste diretório segue o que determina a licença [MIT](https://opensource.org/licenses/MIT).