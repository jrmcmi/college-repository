I. Introduction

 1. Basic C++ Hello World


#include <iostream>
using namespace std;

int main() {
    cout << "Hello, World!" << endl;
    return 0;
}



II. Variables

1. What is a Variable?
- A variable is a container that stores or holds data, allowing us to manipulate the stored data in our programs. 

2. Syntax of a Variable
Ex.
- int age = 19;
- char name_initial = 'J';
- string name = "Jearim";

3. Example Code of a Variable 


#include <iostream>
using namespace std;

int main() {
    char initial = 'A';
    
    cout << "God sends an angel in disguise starting with the intial " << initial << "." << endl;
    
    return 0;
}



III. Data Types

1. What is a Data Type?
- Data types specify the type of data a variable can hold, such as integers(int), double(double), character(char), string(string), and more.

2. Different Data Types
- Integer (int)
    int number = 19;

- double (double)
    double price = 3.14;

- character (char)
    char initial = 'J';

- string (string) 
    string name = "Jearim";

3. Example Syntax


#include <iostream>
using namespace std;

int main() {
    int age = 19;
    char name_Initial = 'J';
    string name = "Jearim";

    cout << "My name is " << name << " with the " << name_Initial << "," <<
    " I am " << age << " years old.\n";

    return 0;
}


IV. Basic Input and Output

1. Example Code


#include <iostream>
using namespace std;


int main() {
    
    string first_Name;
    string last_Name;
    string address;
    char middle_Initial;
    int age;
    
    cout << "Enter your first name: ";
    cin >> first_Name;
    
    cout << "Enter your last name: ";
    cin >> last_Name;

    cout << "Enter your middle initial (dont include a period): ";
    cin >> middle_Initial;

    cout << "Enter your age: ";
    cin >> age;

    cout << "Enter your address: ";
    cin >> address;

    cout << "\nYou are " << first_Name << " " << middle_Initial << ". " <<
    last_Name << ". " << endl << "You are " << age << ". " << endl << "You live in " << address << ".\n";

    return 0;
}


V. Operators

1. Different Types of Operators:
- Arithmetic Operators 
    Operators: +, -, *, /, %

ex, used: +

    int x, z;
    x = 10;
    z = 5;

    cout << (x + z) << endl;

    = 15

- Assignment Operators 
    Operators: =, +=, -=, *=, /=, %=

ex, used: +=

    int x = 10;
    x += 5;

    cout  << "(x += 5): " << x << endl;

    = 15

- Relational Operators 
    Operators: ==, !=, <, >, <=, >=

ex, used: ==

    int x = 10, z = 10;
    bool result = (x == z);

    cout << "(a == b): " << result << endl;

    = 1 (true)

- Logical Operators 
    Operators: &&, ||, !

ex, used: &&

    bool x = true, z = false;
    bool result = (x && z);

    cout << "(x && z):" << result << endl;

    = 0 (false)

- Bitwise Operators 
    Operators: &, |, ^, ~, <<, >>

ex, used: &

    int x = 10;
    int z = 5;
    int result = (x & z);

    cout << "(x & z): " << result << endl;

    = 0

VI. Control Flow

1. Sequential

    Overview:
        Sequential control flow means that the code executes line by line, starting from above to down or in the order it is written.

    Flowchart

2. Selection/Conditional
Types of Selection 

- If 
    flowchart here 

    Syntax with ex using operators 
    
        int number_1, number_2;

        cout << "Type in 2 numbers below.\nType in the first number: ";
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

        
- Switch 
        flwochart here 

        Syntax with ex using operators 

        char op;
        double number_1;
        double number_2;
        double result;

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
    

references

https://www.programiz.com/cpp-programming
https://github.com/hijearim/college_repository