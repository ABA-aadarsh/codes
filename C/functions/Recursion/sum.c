#include<stdio.h>
int sum(int n);
int main(){
    int n;
    printf("Enter term: ");
    scanf("%d",&n);
    printf("The sum of natural numbers upto %d is %d\n",n,sum(n));
}
int sum(int n){
    if(n==1){
        return 1;
    }else if(n==0){
        return 0;
    }else{
        return n+sum(n-1);
    }
}