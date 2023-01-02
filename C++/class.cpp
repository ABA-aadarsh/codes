#include<iostream>
using namespace std;
class student{
    public:
    int roll;
    string name;
};
int main(){
    student s1;
    cout<<"Enter roll no: ";
    cin>>s1.roll;
    cout<<"Enter name: ";
    cin>>s1.name;
    cout<<"Roll no: "<<s1.roll<<endl;
    cout<<"Name: "<<s1.name<<endl;
}