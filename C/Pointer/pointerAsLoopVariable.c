#include<stdio.h>
int main(){
    int n, a, f=1, *p;
    printf("Enter num: ");
    scanf("%d",&n);
    p=&n;
    for(a=1;a<=*p;a++){
        f=f*a;
    }
    printf("The factorial is %d\n",f);
}