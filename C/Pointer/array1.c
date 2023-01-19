#include<stdio.h>
int main(){
    int arr[5], *p, a, sum=0;
    for(a=0;a<5;a++){
        printf("Enter num: ");
        scanf("%d",&arr[a]);
    }
    p=arr;
    // p=&arr[0]; 
    for(a=0;a<5;a++){
        sum+=*p;
        p++;
    }
    printf("Sum of the numbers is %d\n",sum);
}