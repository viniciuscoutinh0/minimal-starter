![Minimal Logo](https://sdmntprwestus2.oaiusercontent.com/files/00000000-4ffc-61f8-886a-88be179b32a9/raw?se=2025-06-26T19%3A23%3A49Z&sp=r&sv=2024-08-04&sr=b&scid=3eefb482-4ae2-59db-be46-c66c6f42954e&skoid=04233560-0ad7-493e-8bf0-1347c317d021&sktid=a48cca56-e6da-484e-a814-9c849652bcb3&skt=2025-06-26T08%3A39%3A28Z&ske=2025-06-27T08%3A39%3A28Z&sks=b&skv=2024-08-04&sig=6/M7tDyj7FUzhOiQDNGT6BPOdKxp6zqfhClTnnc7bWQ%3D "Minimal")

# Minimal

Minimal é um framework simples e leve para páginas únicas, ideal para projetos pequenos, dashboards e ferramentas SPA.

## Funcionalidades

- View engine própria
- ORM com sintaxe inspirada no Laravel
- Integração com Vite e hot reload
- Suporte a testes com Pest
- TailwindCSS e Alpine.js pré-configurados

## Instalação

Para instalar, utilize o comando:

```
composer create-project viniciuscoutinh0/minimal-starter
```

Após a instalação, copie o arquivo `.env.example` para `.env`:

```
cp .env.example .env
```

## Registrando views

Você pode registrar e renderizar views de forma simples. O caminho padrão onde os arquivos são armazenados é:

```
resources/views
```

No arquivo `app.php`:

```php
$app->view('path/to/view')->name('name');
```

## Renderizando views

No `index.php`, você pode renderizar suas views da seguinte forma:

```php
<?php View::render('welcome'); ?>
```

## Passando dados para views

Existem duas formas de passar dados para as views:

**Via array diretamente no método:**

```php
$app->view('path/to/view', ['foo' => 'bar'])->name('name');
```

**Ou utilizando o método `with`:**

```php
$app->view('path/to/view')->with('foo', 'bar')->name('name');
```

## Passando dados globais

Você pode passar dados de forma _global_ para todas as views utilizando o método `share`:

```php
View::share('foo', 'bar');
```

> Por padrão, uma variável com a instância de `$app` já está disponível em todas as views.

## Utilizando dados na view

As variáveis passadas para a view ficam disponíveis diretamente no arquivo de template. Por exemplo:

```php
<?= $foo; ?>
```

> Exibe "bar"

## ORM

Para utilizar o ORM, descomente a linha 11 no `app.php` e configure o `.env` com as credenciais do banco. Atualmente, o Minimal possui suporte apenas para **MS SQL Server**.

Exemplo de configuração:

```php
<?php

declare(strict_types=1);

require __DIR__.'/../vendor/autoload.php';

use Viniciuscoutinh0\Minimal\Application;

$app = Application::make(dirname(__DIR__, 1));

$app->registerProvider(new Viniciuscoutinh0\Minimal\Providers\DatabaseProvider);

$app->boot();

$app->view('welcome')->name('welcome');
```

Crie um modelo em `app/Models`:

```php
<?php

namespace App\Models;

use Viniciuscoutinh0\Minimal\Database\Model;

final class User extends Model
{
    // Nome da tabela
    protected string $table = 'users';

    // Chave primária da tabela
    protected string $primaryKey = 'id';
}
```

### Consultas

```php
User::newQuery()->first(); // Retorna o primeiro resultado
User::newQuery()->find(1); // Retorna o resultado com ID 1
User::newQuery()->get(); // Retorna um array de resultados
```

### Filtros

```php
User::newQuery()->where('id', 2)->first();
User::newQuery()->where('id', 2)->orWhere('id', 3)->first();
```

### Operadores

Você pode alterar o operador nas cláusulas `where`, utilizando o `OperatorEnum`.

Exemplo:

```php
use Viniciuscoutinh0\Minimal\Database\Grammar\Enums\OperatorEnum;

User::newQuery()->where('foo', '%bar%', OperatorEnum::Like)->get();
```

### Operadores disponíveis:

```php
enum OperatorEnum: string
{
    case Equal = '=';
    case NotEqual = '<>';
    case GreaterThan = '>';
    case LessThan = '<';
    case GreaterThanOrEqual = '>=';
    case LessThanOrEqual = '<=';
    case Like = 'like';
    case NotLike = 'not like';
}
```

Esses operadores permitem construir consultas mais precisas ao banco de dados, mantendo a clareza e segurança do código.

### Selecionando colunas específicas

```php
User::newQuery()->select('name')->where('id', 2)->first();

// Alternativas
User::newQuery()->first('name'); // SELECT name FROM users
User::newQuery()->find(1, columns: 'name');
User::newQuery()->get('name');
```

### Utilizando `distinct`

```php
User::newQuery()->distinct()->select('id')->get();
```

## QueryString

Você pode obter dados da query string através da instância do `$app`:

```php
// Exemplo de URL: ?foo=bar

$app->query()->get('foo'); // Retorna: bar
```

> Caso o valor não seja encontrado, o retorno padrão será `null`.  
> Você pode definir um valor padrão como segundo argumento:

```php
$app->query()->get('foo', 'valor-padrao');
```
