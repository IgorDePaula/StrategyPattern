Strategy Pattern
================

Este é um exemplo extraído de um sistema real. 

Qual o objetivo do Strategy pattern?
------------------------------------

Alterar um algoritmo em tempo de execução apenas conhecendo sua interface. Segundo Erich Gamma (et all - Gamma, Erich et all. Padrões de projeto - Soluções reutilizáveis de software orientado a objetos. 2000, Bookman): 

```
Definir uma família de algoritmos, encapsular cada uma delas e torná-las intercam-
biáveis. Strategy permite que o algoritmo varie independentemente dos clientes que
o utilizam.
```

Aplicabilidade
--------------

você necessita de variantes de um algoritmo. Por exemplo, pode definir
algoritmos que refletem diferentes soluções de compromisso entre espaço/
tempo. As estratégias podem ser usadas quando essas variantes são
implementadas como uma hierarquia de classes de algoritmos

Vantagens, desvantagens e consequências
---------------------------------------

Estratégias eliminam comandos condicionais da linguagem de programação. O
padrão Strategy oferece uma alternativa ao uso de comandos condicionais
para a seleção de comportamentos desejados.
Quando diferentes comportamentos são agrupados em uma classe é difícil evitar o uso de comandos
condicionais para a seleção do comportamento correto.O encapsulamento do comportamento em classes 
Strategy separadas elimina estes comandos condicionais.
                                           
A possibilidade de escolha de implementações. As estratégias podem fornecer
diferentes implementações do mesmo comportamento. O cliente pode escolher 
entre estratégias com diferentes compromissos entre tempo e espaço.

Diagrama (do projeto atual)
--------

![Diagrama](https://github.com/IgorDePaula/StrategyPattern/blob/master/img/diagram.png)