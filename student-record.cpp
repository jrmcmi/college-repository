#include <iostream>
using namespace std;

float getAverage(float num1, float num2, float num3){
  float sum = num1 + num2 + num3;
  return sum / 3;
}

int main(){
   
    float arrayRecord[2][2][3];
    float result;

    for(int s = 0; s < 2; s++){
        cout << endl << "---------- SECTION " << s + 1 << " ----------" << endl;
        for(int r = 0; r < 2; r++){
            cout << "\n---Student N.O " << r + 1 << " Grades---" << endl;
            for(int c = 0; c < 3;c++){
                cout << "Enter grade for subject " << c + 1 << " : ";
                cin >> arrayRecord[s][r][c];
            }
        }
    }
    
    for(int v = 0; v < 2; v++){
        cout << endl << "---------- SECTION " << v + 1 << " ----------" << endl;
        for(int x = 0; x < 2; x++){
            cout << endl << "Student N.O " << x + 1 << " average grade is: " << endl;
            for(int b = 0; b < 1; b++){
                result = getAverage(arrayRecord[v][x][b], arrayRecord[v][x][b+1], arrayRecord[v][x][b+2]);
                cout << result;
            }
        }
    }




    return 0;
}