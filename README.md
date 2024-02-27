# Processo Seletivo Mentes Notaveis

API em Laravel 10

## Pré-requisitos

Antes de começar, certifique-se de ter os seguintes itens instalados em sua máquina:

- [Docker](https://www.docker.com/get-started)
- [Docker Compose](https://docs.docker.com/compose/install/)

## Primeiros Passos

1. **Clone o repositório:**

   ```bash
   git clone https://github.com/thiagormoreira/mn-laravel-api
   cd mn-laravel-api
   ```

2. **Copie o arquivo `.env.example` para criar um novo arquivo `.env`:**

   ```bash
   cp .env.example .env
   ```

3. **Instale o Sail:**

   ```bash
   ./vendor/bin/sail install
   ```

4. **Construa e inicie os containers:**

   ```bash
   ./vendor/bin/sail up -d
   ```

## Rodando Migrações

Para executar as migrações e configurar o banco de dados, utilize o seguinte comando:

```bash
./vendor/bin/sail artisan migrate
```

## Rodando Testes PHPUnit

Para executar os testes PHPUnit, utilize o seguinte comando:

```bash
./vendor/bin/sail test
```

Este comando executará todos os testes localizados no diretório `tests`.

## Parando o Ambiente de Desenvolvimento

Para parar o ambiente de desenvolvimento e desligar os containers, execute:

```bash
./vendor/bin/sail down
```

## Comandos Adicionais

O Sail fornece comandos adicionais para várias tarefas. Consulte a [documentação oficial do Laravel Sail](https://laravel.com/docs/sail) para mais informações.

## Contribuição

Sinta-se à vontade para contribuir para este projeto enviando problemas ou solicitações de pull.

## Licença

Este projeto é licenciado sob a Licença MIT - consulte o arquivo [LICENSE](LICENSE) para obter mais detalhes.
