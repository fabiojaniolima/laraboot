# Release Notes

## v2.2.1 (2018-12-21)

### Fixed
- Corrigido um erro que ocorria ao tentar inserir data de aniversário no banco [(#3)](https://github.com/fabiojaniolima/laraboot/issues/3)

### Changed
- Ao rodar a seed o admin DEVE inicia com locked = 0 [(918e40b)](https://github.com/fabiojaniolima/laraboot/commit/918e40bb4b35059757c9f1b601d6ed1818731398)
- Ajuste na estrutura de diretórios das views [(85618f1)](https://github.com/fabiojaniolima/laraboot/commit/85618f1dfbeb9c4276006d737698ac0019fd0748)

## v2.2.0 (2018-12-14)

### Added
- Alert para ações de bloqueio/desbloqueio e exclusão de usuário [(6e7a9c4)](https://github.com/fabiojaniolima/laraboot/commit/6e7a9c4165433913ee7ce6e84deda5e1bfa4faa5)
- Tradução pt-BR para a página 419 [(9fd3855)](https://github.com/fabiojaniolima/laraboot/commit/9fd38558e7f9b0f6506eec5d11e295846348004f)

### Changed
- Preenchimento do campo `created_at` [(4832a59)](https://github.com/fabiojaniolima/laraboot/commit/4832a590a17598cad9fae496212a559f5d6a65b2)
- Aplicado mutetors na model User para padronizar formato de dados [(e4c4385)](https://github.com/fabiojaniolima/laraboot/commit/e4c43853bf2e5c8cd8f25cdf0ed9b7f70d7c54db)

## v2.1.0 (2018-12-13)

### Added
- Impede que usuários bloqueados efetuem login ou continuem navegando no sistema [(751cf6f)](https://github.com/fabiojaniolima/laraboot/commit/751cf6f33242c8fbc7e9a0bb06dda4931836c667)
- Restrinção no acesso a `/painel/gerenciar-usuarios` [(3769341)](https://github.com/fabiojaniolima/laraboot/commit/3769341b1ae0c1348885deb8375fd3a1ae9a69ac)
- Bloquear/desbloquear usuário [(cf4ac3f)](https://github.com/fabiojaniolima/laraboot/commit/cf4ac3f205952ca6aed5e36a8c5f91e7a6fe4eaf)
- Excluir usuários [(ddbb687)](https://github.com/fabiojaniolima/laraboot/commit/ddbb6875a1c5a4e9ec9487599ea4973385a7cef7)
- Página com detalhes do usuário [(25ac667)](https://github.com/fabiojaniolima/laraboot/commit/25ac66747614181be3f5c17390247ee32bb8671e)
- Listagem de usuários [(4ac54fb)](https://github.com/fabiojaniolima/laraboot/commit/4ac54fb97b7afea0bbc36c50a6496e40e074db18)
- Tradução pt-BR as páginas de *erro* 403, 404 e 500 [(ac35812)](https://github.com/fabiojaniolima/laraboot/commit/ac3581268438071a2ca56d055d1125fa5cb8795f)
- Link para alteração de e-mail no form de dados cadastrais [(3931f25)](https://github.com/fabiojaniolima/laraboot/commit/3931f250784152cfa456a29ce8e53b4c0f392f9a)

### Changed
- Obriga novos usuários a informar um nome `>=` a 3 caracteres [(4f65936)](https://github.com/fabiojaniolima/laraboot/commit/4f6593637866504aea210511600622c882168353)
- Diretório user renomeado para User [(c8c6d1b)](https://github.com/fabiojaniolima/laraboot/commit/c8c6d1b81f2ac3c9485dbf64644bc947934f2099)
- Diretório de views alterado de painel para panel [(93a883c)](https://github.com/fabiojaniolima/laraboot/commit/93a883cf193ecb6e81a532db7c4be91eb94fc549)

### Fixed
- Erro que era apresentado quando a sessão do usuário se tornava invalida [(#2)](https://github.com/fabiojaniolima/laraboot/issues/2)
- Adequação das instruções para criação do container de desenvolvimento [(df6b388)](https://github.com/fabiojaniolima/laraboot/commit/df6b3882f5bd32a2e1cf9ade41a39e3cbe87bab7)

### Removed
- Rota `home` [(1944247)](https://github.com/fabiojaniolima/laraboot/commit/194424780f812145297b4bf7d8f083667d92d5c2)
- Laravel-debugbar [(a57df81)](https://github.com/fabiojaniolima/laraboot/commit/a57df81f7456c541d51de321d33909efb94031c1)

## v2.0.1 (2018-12-09)

### Fixed
- Nome dos campos no callback traduzidos para pt-BR [(87152d1)](https://github.com/fabiojaniolima/laraboot/commit/87152d128547f02f80b9ec0b8c2c81dc694d9b6e)
- Seleção de gênero  [(87152d1)](https://github.com/fabiojaniolima/laraboot/commit/87152d128547f02f80b9ec0b8c2c81dc694d9b6e)

## v2.0.0 (2018-12-09)

### Changed
- Código refatorado com base no Laravel 5.7 [(2e86960)](https://github.com/fabiojaniolima/laraboot/commit/2e86960dbfd228bd16d1b2aef9d2058c677e3b3a)

### Removed
- Laravel-debugbar [(2e86960)](https://github.com/fabiojaniolima/laraboot/commit/2e86960dbfd228bd16d1b2aef9d2058c677e3b3a)

## v1.2.0 (2018-04-25)

### Added
- Função alterar perfil, rota: `/painel/alterar-perfil` [(8085036)](https://github.com/fabiojaniolima/laraboot/commit/8085036907db43f2e934a726a57ac4dc6c012cea)

### Changed
- Pequenas adequações visuais (add botões e espaçamento) [(7d5ef6c)](https://github.com/fabiojaniolima/laraboot/commit/7d5ef6c63f4515037edb784c0a18ba1bc2b90016)

## v1.1.0 (2018-04-16)

### Added
- Função alterar e-mail, rota: `/painel/alterar-email` [(f3c9945)](https://github.com/fabiojaniolima/laraboot/commit/f3c994521899c406fc12c2858351642822490254)
- Função alterar senha, rota: `/painel/alterar-senha` [(be634ea)](https://github.com/fabiojaniolima/laraboot/commit/be634ea1b74aa3e16d5be183fce80fdced790478)

## v1.0.0 (2018-04-15)

### Added
- **Laravel-debugbar** para ambiente de desenvolvimento [(f96bbe5)](https://github.com/fabiojaniolima/laraboot/commit/f96bbe5f2bc8983baadea9d8d5a7b89f5b2c5655)
- Área restrita (rota: /painel) [(b42ab2b)](https://github.com/fabiojaniolima/laraboot/commit/b42ab2b0c943f85d665f1ca15775d7b241f84f54)
- Lang pt-BR [(13ae8bf)](https://github.com/fabiojaniolima/laraboot/commit/13ae8bf0e3d9315ad7a1a518c7df67e4641ddaad)
- Travis-CI e StyleCI [(79aec3d)](https://github.com/fabiojaniolima/laraboot/commit/79aec3dbfe4f6358aa0a254ea00818e9f995af46)

### Changed
- E-mail de redefinição de senha traduzido para pt-BR [(4282f60)](https://github.com/fabiojaniolima/laraboot/commit/4282f60adcfcf109a75d9758819a5bbd4a57670f)
- Corrigida referência para laraboot [(f0cadb5)](https://github.com/fabiojaniolima/laraboot/commit/f0cadb58ec661af5a4c01f18904b2f1ede167d11)
- Aplicados pequenos ajustes visuais [(436c9e4)](https://github.com/fabiojaniolima/laraboot/commit/436c9e43693453e9aff7d3169a8f244afa276524)
- Aplicadas configurações essenciais [(ef6386b)](https://github.com/fabiojaniolima/laraboot/commit/ef6386bed9852f8b0c5ffb1a9cb078840e97516e)