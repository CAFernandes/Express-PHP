# Express PHP Microframework

[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)
[![PHP Version](https://img.shields.io/badge/PHP-7.4%2B-blue.svg)](https://php.net)
[![GitHub Issues](https://img.shields.io/github/issues/CAFernandes/express-php)](https://github.com/CAFernandes/express-php/issues)
[![GitHub Stars](https://img.shields.io/github/stars/CAFernandes/express-php)](https://github.com/CAFernandes/express-php/stargazers)
[![Latest Release](https://img.shields.io/github/v/release/CAFernandes/express-php)](https://github.com/CAFernandes/express-php/releases)

**Express PHP** é um microframework leve, rápido e seguro inspirado no Express.js para construir aplicações web e APIs modernas em PHP com sistema nativo de autenticação multi-método.

[![English](https://img.shields.io/badge/Language-English-blue)](../../README.md) [![Português](https://img.shields.io/badge/Language-Português-green)](README.md)

> 🔐 **Novidade na v1.0**: Sistema completo de autenticação com JWT, Basic Auth, Bearer Token, API Key e auto-detecção!

## 🚀 Novidade: Exemplos Modulares e Aprendizagem Guiada

A partir da versão 2025, o Express PHP traz uma coleção de exemplos modulares para facilitar o aprendizado e a especialização em cada recurso do framework. Veja a pasta `examples/`:

- `example_user.php`: Rotas de usuário e autenticação
- `example_product.php`: Rotas de produto, parâmetros e exemplos OpenAPI
- `example_upload.php`: Upload de arquivos com exemplos práticos
- `example_admin.php`: Rotas administrativas e autenticação
- `example_blog.php`: Rotas de blog
- `example_complete.php`: Integração de todos os recursos e documentação automática
- `example_security.php`: Demonstração dos middlewares de segurança

Cada exemplo utiliza sub-routers especializados, facilitando o estudo isolado de cada contexto. Os arquivos em `examples/snippets/` podem ser reutilizados em qualquer app Express PHP.

## 📚 Documentação Automática OpenAPI/Swagger

- **Agrupamento por tags**: Endpoints organizados por contexto (User, Produto, Upload, Admin, Blog) na interface Swagger
- **Múltiplos servers**: Documentação já inclui ambientes local, produção e homologação
- **Exemplos práticos**: Requests e responses de exemplo para facilitar testes e integração
- **Respostas globais**: Todos os endpoints já documentam respostas 400, 401, 404 e 500
- **BaseUrl dinâmica**: O campo `servers` é ajustado automaticamente conforme o ambiente

Acesse `/docs/index` para a interface interativa.

## 🎯 Como Estudar Cada Recurso

- Para aprender sobre rotas de usuário: rode `php examples/example_user.php`
- Para upload: `php examples/example_upload.php`
- Para produto: `php examples/example_product.php`
- Para admin: `php examples/example_admin.php`
- Para blog: `php examples/example_blog.php`
- Para segurança: `php examples/example_security.php`
- Para ver tudo integrado: `php examples/example_complete.php`

## 📁 Estrutura Recomendada para Projetos

```
examples/           # Exemplos práticos e didáticos
├── snippets/       # Sub-routers prontos para reuso
SRC/               # Framework e middlewares
├── Middlewares/   # Sistema de middlewares organizado
│   ├── Security/  # Middlewares de segurança (CSRF, XSS)
│   └── Core/      # Middlewares principais (CORS, Rate Limiting)
test/              # Testes e experimentos
docs/              # Documentação
├── en/            # Documentação em inglês
└── pt-br/         # Documentação em português
```

## 💡 Início Rápido

Você pode criar seu próprio app Express PHP copiando e adaptando qualquer exemplo da pasta `examples/`.

```php
<?php
require_once 'vendor/autoload.php';

use Express\SRC\ApiExpress;
use Express\SRC\Middlewares\Security\SecurityMiddleware;
use Express\SRC\Middlewares\Core\CorsMiddleware;

$app = new ApiExpress();

// Aplicar middleware de segurança
$app->use(SecurityMiddleware::create());

// Aplicar CORS
$app->use(new CorsMiddleware());

// Rota básica
$app->get('/', function($req, $res) {
    $res->json(['message' => 'Olá Express PHP!']);
});

// Rota protegida
$app->post('/api/users', function($req, $res) {
    $userData = $req->body;
    // Dados do usuário são automaticamente sanitizados pelo middleware de segurança
    $res->json(['message' => 'Usuário criado', 'data' => $userData]);
});

$app->run();
```

## 🛡️ Recursos de Segurança

O Express PHP inclui middlewares robustos de segurança:

- **Proteção CSRF**: Proteção contra Cross-Site Request Forgery
- **Proteção XSS**: Sanitização contra Cross-Site Scripting
- **Cabeçalhos de Segurança**: Cabeçalhos de segurança automáticos
- **Rate Limiting**: Limitação de taxa de requisições
- **Segurança de Sessão**: Configuração segura de sessão

## 📖 Documentação

- [🇺🇸 Documentação em Inglês](../en/README.md)
- [🇧🇷 Documentação em Português](README.md)
- [Documentação de Middlewares](../../SRC/Middlewares/README.md)
- [Objetos da API](objetos.md)

## 🔧 Instalação

1. Clone o repositório:
```bash
git clone https://github.com/your-username/Express-PHP.git
cd Express-PHP
```

2. Instale as dependências (se usando Composer):
```bash
composer install
```

3. Execute um exemplo:
```bash
php examples/example_complete.php
```

4. Abra seu navegador em `http://localhost:8000`

## 📦 Instalação

### Via Composer (Recomendado)

```bash
composer require express-php/microframework
```

### Ou clone o repositório

```bash
git clone https://github.com/CAFernandes/express-php.git
cd express-php
composer install
```

## 🌟 Funcionalidades

- ✅ **Sintaxe similar ao Express.js** para PHP
- ✅ **PSR-4 Autoloading** com suporte ao Composer
- ✅ **PHP Moderno** (7.4+ necessário)
- ✅ **Roteamento automático** com suporte a parâmetros
- ✅ **🆕 Autenticação Avançada** (JWT, Basic Auth, Bearer Token, API Key)
- ✅ **Middlewares de segurança** (proteção CSRF, XSS)
- ✅ **Geração de documentação** OpenAPI/Swagger
- ✅ **Tratamento de upload** de arquivos
- ✅ **Suporte a CORS**
- ✅ **Rate limiting**
- ✅ **Validação de requisições**
- ✅ **Tratamento de erros**
- ✅ **Arquitetura modular**
- ✅ **Suporte a testes** PHPUnit

## 🤝 Contribuindo

Contribuições são bem-vindas! Por favor, leia nosso [Guia de Contribuição](../../CONTRIBUTING.md) para detalhes.

1. Faça um fork do repositório: https://github.com/CAFernandes/express-php
2. Crie sua branch de feature: `git checkout -b feature/funcionalidade-incrivel`
3. Commit suas mudanças: `git commit -m 'Adiciona funcionalidade incrível'`
4. Push para a branch: `git push origin feature/funcionalidade-incrivel`
5. Abra um Pull Request

## 📄 Licença

Este projeto está licenciado sob a Licença MIT - veja o arquivo [LICENSE](../../LICENSE) para detalhes.

## 🔗 Links

- **Repositório**: https://github.com/CAFernandes/express-php
- **Issues**: https://github.com/CAFernandes/express-php/issues
- **Documentação**: https://github.com/CAFernandes/express-php/wiki
- **Releases**: https://github.com/CAFernandes/express-php/releases
- **Packagist**: https://packagist.org/packages/express-php/microframework

## 🙏 Agradecimentos

- Inspirado no framework [Express.js](https://expressjs.com/)
- Desenvolvido com ❤️ por [Caio Alberto Fernandes](https://github.com/CAFernandes)
- Agradecimentos especiais a todos os [contribuidores](https://github.com/CAFernandes/express-php/contributors)

---

**Feito com ❤️ no Brasil 🇧🇷**

- Inspirado no Express.js
- Construído para a comunidade PHP
- Projetado para desenvolvimento web moderno

---

**Express PHP** - Construindo aplicações PHP modernas com simplicidade e segurança.
