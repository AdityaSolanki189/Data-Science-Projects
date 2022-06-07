/* Lex program to check whether input is digit or not. */

%{
#include<stdio.h>
#include<stdlib.h>
%}

/* Rule Section */

%%
^[0-9]* printf("digit");
^[^0-9]|[0-9]*[a-zA-Z] printf("not a digit");
. ;
%%

int main()
{
		// The function that starts the analysis
	yylex();
	return 0;
}

int yywrap(){return(1);}