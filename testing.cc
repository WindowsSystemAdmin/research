#include <iostream>

using namespace std;

int main(){
  double * happy = new double[1000];
  char * shape = new char[10];
  int x = 0;
  cout << "Enter a number: ";
  cin >> x;
  cout << "Your number is: " << x << endl;
  delete [] shape;
  delete[] happy;
  cout << "Deleted shape\n";
}
