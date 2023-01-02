#include<stdio.h>
int main(){
    int t, n, a=7;
    printf("Enter term: ");
    scanf("%d",&t);
    for(n=1;n<=t;n++){
        printf("%d\t",a);
        if(a%2==0){
            a=a/2;
        }else{
            a=3*a+1;
        }
    }
}