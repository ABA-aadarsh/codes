#include<stdio.h>
void fib(int n);
int main(){
    int n;
    printf("Enter term: ");
    scanf("%d",&n);
    fib(n);
}
void fib(int n){
    int a=0,b=1,temp,loop;
    for(loop=1;loop<=n;loop++){
        printf("%d\t",a);
        temp=a+b;
        a=b;
        b=temp;
    }
}