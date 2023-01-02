#include<stdio.h>
extern int a=10, b=5;
void test();
int main(){
    printf("%d\t%d\n",a,b);
    test();
}
void test(){
    int a=0,b=1;
    printf("%d\t%d\n",a,b);
}