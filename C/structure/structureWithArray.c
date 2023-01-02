#include<stdio.h>
struct student{
    int roll;
    char fname[20];
    char lname[20];
}st[2];
void display(struct student s);
int main(){
    // struct student s1;
    int a;
    for(a=0;a<2;a++){
        printf("Enter roll no: ");
        scanf("%d",&st[a].roll);
        printf("Enter First name: ");
        scanf("%s",st[a].fname);
        printf("Enter Last name: ");
        scanf("%s",st[a].lname);
    }
    for(a=0;a<2;a++){
        display(st[a]);
    }
}
void display(struct student s){
    printf("Roll no: %d\nName: %s %s\n",s.roll,s.fname,s.lname);
}