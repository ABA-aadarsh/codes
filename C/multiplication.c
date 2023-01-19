#include<stdio.h>
int main(){
    int a,b;
    for(a=2;a<5;a++){
        for(b=1;b<=10;b++){
            printf("%d*%d=%d\n",a,b,a*b);
        }
        printf("\n");
    }
}