#include<stdio.h>
int fib(int n);
int main(){
    int n,a;
    printf("Enter term: ");
    scanf("%d",&n);
    for(a=1;a<=n;a++){
        printf("%d\t",fib(a));
    }
}
int fib(int n){
    if(n==1){
        return 1;
    }else if(n==0){
        return 0;
    }else{
        return fib(n-1)+fib(n-2);
    }
}