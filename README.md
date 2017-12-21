# spartanhttp

Framework para geração e comunicação da spartanhttp

*Utilize o chat do Gitter para iniciar discussões específicas sobre o desenvolvimento deste pacote.*

Este pacote é aderente com os [PSR-1], [PSR-2] e [PSR-4]. Se você observar negligências de conformidade, por favor envie um patch via pull request.

[PSR-1]: https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-1-basic-coding-standard.md
[PSR-2]: https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md
[PSR-4]: https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-4-autoloader.md


## Install

**Este pacote está listado no [Packgist](https://packagist.org/) foi desenvolvido para uso do [Composer](https://getcomposer.org/), portanto não será explicitada nenhuma alternativa de instalação.**

*E deve ser instalado com:*
```bash
composer require spartanhttp/spartanhttp
```

> NOTA: Ao utilizar este pacote na versão em desenvolvimento não se esqueça de alterar o composer.json da sua aplicação para aceitar pacotes em desenvolvimento, alterando a propriedade "minimum-stability" de "stable" para "dev".
> ```json
> "minimum-stability": "dev"
> ```

## Requirements

Para que este pacote possa funcionar são necessários os seguintes requisitos do PHP e outros pacotes dos quais esse depende.

- PHP 5.6 ou PHP 7.x (recomendável PHP 7.x) 
- ext-curl
- ext-dom
- ext-json
- ext-gd
- ext-mbstring
- ext-mcrypt
- ext-openssl
- ext-soap
- ext-xml
- ext-zip


## Donations

> ### 

## Documentation

O processo de documentação ainda está no inicio, mas já existem alguns documentos úteis.

[Documentação](docs/Funcionalidades.md)

## Contributing

Para contribuir com correções de BUGS, melhoria no código, documentação, elaboração de testes ou qualquer outro auxílio técnico e de programação por favor observe o [CONTRIBUTING](CONTRIBUTING.md) e o  [Código de Conduta](CONDUCT.md) para maiores detalhes.

## Change log

Acompanhe o [CHANGELOG](CHANGELOG.md) para maiores informações sobre as alterações recentes.

## Testing

Todos os testes são desenvolvidos para operar com o PHPUNIT

## Security

Caso você encontre algum problema relativo a segurança, por favor envie um email diretamente aos mantenedores do pacote ao invés de abrir um ISSUE.

## Credits

Ronaldo Goncalves (owner and developer)

## License

Este pacote está diponibilizado sob LGPLv3 ou MIT License (MIT). Leia  [Arquivo de Licença](LICENSE.md) para maiores informações.