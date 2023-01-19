#include<stdio.h>
int main(){
    int n;
    ab:
    printf("Enter a number greater than 10: ");
    scanf("%d",&n);
    if(n>10){
        printf("%d",n);
    }else{
        goto ab;
    }
}