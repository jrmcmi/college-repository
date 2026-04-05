#include <iostream>
using namespace std;

int main () {

    int grade;

    cout << "Enter your grade: ";
    cin >> grade;

    if (grade < 0) {
        cout << "Negatives not allowed!\n";
    }else if (grade > 100) {
        cout << "Outside of Boundaries!\n";
    }else if (grade >= 90) {
        cout << "You are Excellent!\n";
    }else if (grade >= 80) {
        cout << "You did a good job!\n";
    }else if (grade >= 75) {
        cout << "Try harder next time!\n";
    }else if (grade >= 60) {
        cout << "You Failed!\n";
    }else {
        cout << "Next Semester!\n";
    }
    return 0;
}