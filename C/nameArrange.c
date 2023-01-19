#include<stdio.h>
#include<string.h>
int main(){
    int a,b;
    char names[5][40], temp[40];
    for(a=0;a<5;a++){
        printf("Enter name : ");
        scanf("%s",names[a]);
    }
    for(a=0;a<5;a++){
        for(b=a+1;b<5;b++){
            if(strcmp(names[a],names[b])>0){
                strcpy(temp,names[a]);
                strcpy(names[a],names[b]);
                strcpy(names[b],temp);
            }
        }
    }
    printf("Displaying in alphabetical order..\n");
    for(a=0;a<5;a++){
        printf("%s\n",names[a]);
    }
}