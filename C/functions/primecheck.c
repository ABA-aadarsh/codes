#include<stdio.h>
int check(int n); //function declaration
int main(){
    int n;
    printf("Enter a number: ");
    scanf("%d",&n);
    if(check(n)==1){//function calling
        printf("The number is prime.\n");
    }else{
        printf("The number is not prime.\n");
    }
}
int check(int n){
    // function defination
    int a,flag=1;
    for(a=2;a<n;a++){
        if(n%a==0){
            flag=0;
            break;
        }
    }
    if(flag==1){
        return 1;
    }else{
        return 0;
    }
}