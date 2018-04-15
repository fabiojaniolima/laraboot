# LaraBoot

Este projeto foi construido com base no [Laravel 5.6](https://laravel.com/docs/5.6).

As palavras-chave "DEVE", "NÃO DEVE", "REQUER", "DEVERIA", "NÃO DEVERIA", "PODERIA", "NÃO PODERIA", "RECOMENDÁVEL", "PODE", e "OPCIONAL" neste documento devem ser interpretadas como descritas no RFC 2119. Tradução livre RFC 2119 pt-br.

### Requisitos

Você DEVE satisfazer as seguintes dependências nativas do Laravel:

- PHP >= 7.1.3
- OpenSSL PHP Extension
- PDO PHP Extension
- Mbstring PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension
- Ctype PHP Extension
- JSON PHP Extension
 
**Obs**: você DEVE ter também o [Composer](https://getcomposer.org) instalado.

## Proposta do projeto

Cansado de sempre que baixa o Laravel ter que aplicar traduções, adicionar iconização as páginas, implementar troca de senha e demais itens? Então seus problemas acabaram, ao menos em parte! 

## Como instalar

Primeiramente você deve clonar este repositório:

    git clone https://github.com/fabiojaniolima/laraboot.git

> **Nota**: os comandos abaixo DEVEM ser executados dentro do diretório descarregado no passo anterior.

Em um **ambiente de desenvolvimento**, é RECOMENDADO que você instale as dependências  do Laravel por meio da instrução:

    composer update

Já em um **ambiente de produção**, as dependências do Laravel DEVEM ser instaladas por meio da instrução:

    composer update --no-dev

**Obs:** o parâmetro `--no-dev` determina que pacotes de desenvolvimento sejam ignorados pelo processo de instalação. Uma abordagem adequada para ambientes de produção, já que isso pode afetar tanto a performance como a segurança do seu aplicativo.

Crie o arquivo de configuração do Laravel e posteriormente gere uma chave:

    composer run-script post-root-package-install
    php artisan key:generate

## Populando base de dados

Para rodar a instrução a seguir, você DEVE primeiramente configurar os dados de acesso ao banco no arquivo **.env**.

Posteriormente a configuração do banco execute:

    php artisan migrate --seed

Pronto, agora abra o navegador e acessa sua aplicação. O argumento `--seed` executado acima cria por padrão um usuário com os seguintes dados:

- E-mail: **admin@user.com**
- Senha: **secret**

## License

Todo o conteúdo presente neste diretório segue o que determina a licença [MIT](https://opensource.org/licenses/MIT).
