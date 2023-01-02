#include<iostream>
using namespace std;
class student{
    public:
    int roll;
    string name;
    void fillInfo(int r, string n){
        roll=r;
        name=n;
    }
    void displayInfo(){
        cout<<"Roll no: "<<roll<<endl<<"Name: "<<name<<endl;
    }
};
int main(){
    student s1,s2;
    s1.fillInfo(1,"aadarsh");
    s1.displayInfo();
    s2.fillInfo(2,"aashraya");
    s2.displayInfo();
}