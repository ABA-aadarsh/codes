#include<stdio.h>
int sum(int num[], int n);
int main(){
    int n;
    printf("How many numbers are there? ");
    scanf("%d",&n);
    int num[n],a;
    for(a=0;a<n;a++){
        printf("Enter a number: ");
        scanf("%d",&num[a]);
    }
    printf("The sum of numbers is %d.\n",sum(num,n));
}
int sum(int num[], int n){
    int a,sum=0;
    for(a=0;a<n;a++){
        sum+=num[a];
    }
    return sum;
}