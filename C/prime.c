#include<stdio.h>
int main(){
    int n,a,b,flag=0;
    printf("Enter a number: ");
    scanf("%d",&n);
    for(a=2;a<=n;a++){
        flag=0;
        for(b=2;b<a;b++){
            if(a%b==0){
                flag=1;
                break;
            }
        }
        if(flag==0){
            printf("%d\t",a);
        }
    }
}