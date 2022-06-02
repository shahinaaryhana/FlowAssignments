$pin = 12345
$tries = 0

puts("WELCOME TO THE BANK OF MITCHELL.")
puts("ENTER YOUR PIN: ")
$entry=gets.to_i
$tries=$tries+1

while ($pin!=$entry && $tries<3)  do
   puts("\nINCORRECT PIN. TRY AGAIN.")
   puts("ENTER YOUR PIN: ")
   $entry=gets.to_i
   $tries=$tries+1
end

if ($entry==$pin)
    puts("\nPIN ACCEPTED. YOU NOW HAVE ACCESS TO YOUR ACCOUNT.")
elsif($tries>=3)
    puts("\nYOU HAVE RUN OUT OF TRIES. ACCOUNT LOCKED.")
end