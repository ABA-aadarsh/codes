// pointer is a variable that stores the address of another variable
#include<stdio.h>
int main(){
    int a=10, *p;
    p=&a;
    printf("P stores address: %u and value in the given address is %d\n",p,*p); 
    printf("Address of a is %u\n",&a);
}