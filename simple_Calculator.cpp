#include <iostream>
using namespace std;

int main() {

    char op;
    double number_1;
    double number_2;
    double result;

    cout << "******** CALCULATOR ********\n\n";

    cout << "Enter an operator either (+ - * /): ";
    cin >> op; 

    cout << "Enter 2 numbers.\nEnter first number: ";
    cin >> number_1;

    cout << "Enter second number: ";
    cin >> number_2;

    switch(op) {
        case '+':
            result = number_1 + number_2;
            cout << "result: " << result << endl;
            break;

        case '-':
            result = number_1 - number_2;
            cout << "result: " << result << endl;
             break;
        
        case '*':
            result = number_1 * number_2;
            cout << "result: " << result << endl;
            break;

        case '/':
            result = number_1 / number_2;
            cout << "result: " << result << endl;
            break;
            
        default:
            cout << "Incorrect Input";
            break;
    }

    cout << "\n******** CALCULATOR ********\n";

    return 0;
}
