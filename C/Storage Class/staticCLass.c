// Storage class defines the storage location, scope, default value and time spanning of the variable
#include<stdio.h>
void test();
int main(){
    test();
    test();
    test();
}
void test(){
    static int n=0;
    n+=5;
    printf("%d\n",n);
}