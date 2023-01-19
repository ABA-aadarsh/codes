#include<stdio.h>
long int factorial(int n);
int main(){
    int n;
    long int f;
    printf("Enter a number: ");
    scanf("%d",&n);
    f=factorial(n);
    printf("The factorial of %d is %ld.\n",n,f);
}
long int factorial(int n){
    if(n==1){
        return 1;
    }else if(n==0){
        return 1;
    }else{
        return n*factorial(n-1);
    }
}