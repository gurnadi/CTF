#include <stdio.h>
int main(){
int i, sum = 0;
int n;
printf("Clue Level 3:");
scanf("%d",&n);
for(i = 0; i <=n; i++){
sum = sum + i;
}
printf("Clue Level 3 : %d Flag : %d\n\n", n,sum);
return 0;
} 
