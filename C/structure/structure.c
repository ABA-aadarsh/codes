#include<stdio.h>
struct student{
    int roll;
    char fname[20];
    char lname[20];
};
void display(struct student s);
int main(){
    struct student s1;
    printf("Enter roll no: ");
    scanf("%d",&s1.roll);
    printf("Enter First name: ");
    scanf("%s",s1.fname);
    printf("Enter Last name: ");
    scanf("%s",s1.lname);
    // printf("Roll no: %d\nName: %s %s\n",s1.roll,s1.fname,s1.lname);
    display(s1);
}
void display(struct student s){
    printf("Roll no: %d\nName: %s %s\n",s.roll,s.fname,s.lname);
}