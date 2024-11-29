void main()
{

int A = 1, B = 2, C = 3;
int *P1, *P2;
P1 = &A;
P2 = &C;
*P1 = (*P2)++;
P1 = P2;
P2 = &B;
*P1 -= *P2;
++ *P2;
*P1 *= *P2;
A = ++*P2**P1;
P1 = &A;
*P2 = *P1 /= *P2;
printf("/d", *P1);
}