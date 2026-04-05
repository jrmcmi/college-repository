#include <iostream>
using namespace std;

int main(){
    
    int number_1, number_2;

    cout << "Type in 2 numbers below." << endl << "Type in the first number: ";
    cin >> number_1;
    cout << "Type in the second number: ";
    cin >> number_2; 

    if (number_1 > number_2) {
        cout << "The first number which is " << number_1 << " is greater than second number " << number_2 << "." << endl;
    } else if (number_1 < number_2) {
        cout << "The first number which is " << number_1 << " is less than second number " << number_2 << "." << endl;
    } else {
        cout << "Both first number " << number_1 << " and second number " << number_2 << " are equal to each other." << endl;
    }

    return 0;
}
