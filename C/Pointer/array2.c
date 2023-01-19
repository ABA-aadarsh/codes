#include<stdio.h>
int main(){
    int num[5], a, *p, g;
    for(a=0;a<5;a++){
        printf("Enter Num: ");
        scanf("%d",&num[a]);
    }
    p=num;
    g=*p;
    for(a=0;a<5;a++){
        if(*p>g){
            g=*p;
        }
        p++;
    }
    printf("The greatest number input is %d\n",g);
}