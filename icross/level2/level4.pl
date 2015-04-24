


#!/usr/bin/perl

my ($mode,$count,$result);
$mode=shift;

if($mode eq "-d"){print "decrypting mode\n";}
elsif($mode eq "-e"){print "encrypting mode\n";}
else{print "Use -d to decrypt\n";exit;}

my %alpha = (
A => '1', B => '2', C => '3', D => '4', E => '5',F => '6',
G => '7', H => '8', I => '9', J => '10', K => '11', L => '12',
M => '13', N => '14', O => '15', P => '16', Q => '17', R => '18',
S => '19', T => '20', U => '21', V => '22', W => '23', X => '24',
Y => '25', Z => '26'
);
my @alpha=qw(A B C D E F G H I J L M N O P Q R S T U V W X Y Z);

print "Clue Level 4: ";
chomp($msg=<stdin>);
print "Key Level 4: ";
chomp($key=<stdin>);
my @msg=split('',$msg);
my @key=split('',$key);

print "Flag Level 4:\n";

for(@msg){
$count+='1';
if($mode eq "-e"){
$result=($alpha{$_} + $alpha{@key[($count-1)]});
if($result>26){$result-=26;}
}
if($mode eq "-d"){
$result=($alpha{$_} - $alpha{@key[($count-1)]});
if($result<1){$result+=26;}
}
print @alpha[($result-1)];
}
print "\n";


