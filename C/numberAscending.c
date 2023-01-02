#include<stdio.h>
int main(){
    int num[10],a,b,temp;
    for(a=0;a<10;a++){
        printf("Enter number : ");
        scanf("%d",&num[a]);
    }
    for(a=0;a<10;a++){
        for(b=a+1;b<10;b++){
            if(num[a]<num[b]){
                temp=num[a];
                num[a]=num[b];
                num[b]=temp;
            }
        }
    }
    printf("Displaying in ascending order..\n");
    for(a=0;a<10;a++){
        printf("%d\n",num[a]);
    }
}