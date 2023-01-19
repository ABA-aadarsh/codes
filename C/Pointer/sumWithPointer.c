#include<stdio.h>
int main(){
    int a=10, b=5, sum, *p, *q;
    p=&a;
    q=&b;
    sum=*p+*q;
    printf("The sum is %d\n",sum);
}