// 12          15
// 15%12=3     12
// 12%3=0      3
// hcf=3
#include<stdio.h>
int hcf(int a, int b);
int main(){
    int a,b;
    printf("Enter a number: ");
    scanf("%d",&a);
    printf("Enter a number: ");
    scanf("%d",&b);
    printf("The HCF is %d\n", hcf(a,b));
    printf("The LCM is %d\n",(a*b)/hcf(a,b));
}
int hcf(int a, int b){
    if(a==0){
        return b;
    }else{
        return hcf(b%a,a);
    }
}