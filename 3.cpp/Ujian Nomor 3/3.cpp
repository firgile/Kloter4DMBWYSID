#include <iostream>
using namespace std;
int main()
{
 int jumlah,a,b,c;;
    jumlah=10;
  for (a=1;a<=jumlah;a++)
 {
  b=1;
  for (b=1;b<=jumlah;b++)
  {
   if(b<=a)
   {
    cout<<"*";
   }else{
    cout<<" ";
   }
  }
  for (c=jumlah-1;c>0;c--)
   {
   if(c<=a){
    cout<<"*";
   }else{
    cout<<" ";
   }
    }
  cout<<endl;
 }
 cout<<endl;
}
