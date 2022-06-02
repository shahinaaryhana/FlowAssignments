$pin = 12345

puts("WELCOME TO THE BANK OF MITCHELL.")
puts("ENTER YOUR PIN: ")
$entry=gets.to_i

while $pin != $entry  do
   puts("\nINCORRECT PIN. TRY AGAIN.")
   puts("ENTER YOUR PIN: ")
   $entry=gets.to_i
end
puts("\nPIN ACCEPTED. YOU NOW HAVE ACCESS TO YOUR ACCOUNT.")