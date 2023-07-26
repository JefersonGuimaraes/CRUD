# CRUD com PHP Orientado à Objeto e MySQL

![GitHub](https://img.shields.io/github/license/JefersonGuimaraes/CRUD)

## Sobre o projeto

Este projeto foi desenvolvido junto ao curso: [CRUD com PHP orientado a objetos, PDO e MySQL](https://www.youtube.com/watch?v=uG64BgrlX7o&ab_channel=WDEV) do professor [William Costa](https://github.com/william-costa). Participei das aulas com intuíto de aprimorar meus conhecimentos sobre as tecnologias utilizadas.

O projeto consiste em um sistema CRUD de vagas de emprego com sistema de login de administração onde as vagas são listadas e é possível cadastrá-las, editá-las e deletá-las.

### Tecnologias utilizadas

* PHP
* MySQL
* Bootstrap

## Como executar o projeto

### Banco de dados

Crie um banco de dados e execute as seguintes instruções SQLs:

~~~
CREATE TABLE `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `senha` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
~~~

```
CREATE TABLE `vagas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `descricao` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ativo` enum('s','n') COLLATE utf8mb4_general_ci NOT NULL,
  `data` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
```

### Configurações

Acesse o arquivo ```./app/Db/Database.php``` e altere as credenciais de acordo com o seu ambiente (HOST, NAME, USER, e PASS).

Para o projeto funcionar, é preciso executar o composer para criar os arquivos de autoload das classes.
Para isso, basta acessar a pasta raíz do projeto pelo terminal e executar o comando: <br><br>
```composer install``` <br><br>
Depois de finalizadas as instalações, uma pasta chamada ```vendor``` será criada no seu projeto e você poderá acessá-lo pelo navegador.
