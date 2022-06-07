%{

%}

letter [a-zA-Z]
digit [0-9]
id {letter}({letter}|{digit})*
num {digit}+(\.{digit}+)?


%%
if|else|then|while|do {printf ("Keyword");}
{num} {printf ("Number");}
{id} {printf ("Identifier");}
%%

int main()
{ yylex();
return 0;
}

int yywrap(){return(1);}