# Projeto Final PW2 - SoloSmart

Este repositório contém o código-fonte do projeto final da disciplina de Programação Web 2 (PW2), intitulado **SoloSmart**.

## Sobre o Projeto

SoloSmart é uma aplicação web desenvolvida para monitorar e gerenciar a saúde do solo em áreas agrícolas. Utilizando sensores de umidade, temperatura e pH, a aplicação permite aos agricultores tomar decisões informadas para otimizar o uso de recursos e aumentar a produtividade.

## Funcionalidades

- **Monitoramento em Tempo Real:** Acompanhe em tempo real os dados dos sensores de umidade, temperatura e pH do solo.
- **Histórico de Dados:** Visualize o histórico de medições para identificar tendências e tomar decisões baseadas em dados.
- **Alertas Personalizados:** Configure alertas para receber notificações quando os níveis de umidade, temperatura ou pH estiverem fora dos parâmetros ideais.
- **Relatórios Detalhados:** Gere relatórios detalhados para análise e documentação.

## Tecnologias Utilizadas

- **Frontend:** HTML, CSS, JavaScript, React.js
- **Backend:** Node.js, Express.js
- **Banco de Dados:** MongoDB
- **Sensores:** DHT11 (temperatura e umidade), Sensor de pH

# Como rodar o projeto

#### Instalando as dependências:
<p> Primeiro iremos instalar os programas, serviços e modulos necessários para o correto funcionamento do site. </p>

> #### Programas e serviços necessários
> 
> - PHP
> - MySql
> - Composer
> - Node LTS Version
> - NVM
> - NPM

#### Depois de instalados iremos para a execução do projeto:

> ### Para execução do projeto se atente às seguintes etapas: 
>
> #### Instalando dependencias e montando o banco através das migrations:
> 1. Verifique se no arquivo **.env** as informações de conexão no banco(usuario e senha) estão compativeis com as suas.

> 2. Se atente aos diretorios onde serão executados os comandos, estamos começando no diretorio principal do projeto apartir da clonagem:
> 
> 
> ```shell
>     cd solosmart/
>     
>     npm install -i
>     
>     php artisan migrate
>
>     npm install -g vite
>
>     sh start.sh
> ```

Se tudo ocorreu bem seu sistema deverá ter executado dois terminais e o site estará rodando no endereço local da sua máquina através da porta 8000

> - **localhost:8000**
> - **127.0.0.1:8000**